<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Posts from Sandys Community Centre</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: Arial, sans-serif;
        }
        .post {
            background-color: #ffffff;
            border: 1px solid #e4e6eb;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        }
        .post-title {
            font-size: 20px;
            font-weight: bold;
            color: #3b5998;
            margin-bottom: 10px;
        }
        .author {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .content {
            margin: 10px 0;
        }
        .time {
            color: #606770;
            font-size: 12px;
        }
        .icon {
            font-size: 20px;
            margin-right: 10px;
            color: #3b5998;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="mt-4">Latest Posts</h1>
    
    <div id="post-container">
        <!-- Posts from Facebook API will be dynamically inserted here -->
    </div>
</div>

<script>
    const pageId = '101357005063276'; 
    const accessToken = 'EAARuAYmgTz8BO64uQAnsHg0CZBZCsqZBFFDZAKx45vjp2YAZAzuWz9fx59mmGO9zndHAvReurXxjRC566EZBDiJAuZCzZCscJ4WZC0LXlxwGt4lNyRPn6GJ6QhqjiWeLOqB4mTKnQF1mxp72pWJRoCRhtXLBZBNd7a6bZCTt3vZBUPyrqZCXqcZBVeZAZCDOmxcKifDgNuIZD'; // 
    async function fetchPosts() {
        try {
            const response = await fetch(`https://graph.facebook.com/v14.0/${pageId}/feed?access_token=${accessToken}&fields=from,message,created_time`);
            const data = await response.json();
            
            if (response.ok && data && data.data) {
                const postContainer = document.getElementById('post-container');
                postContainer.innerHTML = ''; // Clear any existing posts

                // Loop through the data and create post elements
                data.data.forEach(post => {
                    const postElement = document.createElement('div');
                    postElement.classList.add('post');

                    // Fetch post details dynamically from API response
                    const postTitle = post.message ? post.message.substring(0, 50) : 'Untitled Post';
                    const postAuthor = post.from ? post.from.name : 'Unknown Author';
                    const postTime = new Date(post.created_time).toLocaleString();

                    // Insert the post details into the HTML
                    postElement.innerHTML = `
                        <div class="post-title">${postTitle}</div>
                        <div class="author"><i class="fas fa-user icon"></i> Posted by ${postAuthor}</div>
                        <div class="content">${post.message || 'No content available'}</div>
                        <div class="time">${postTime}</div>
                    `;

                    postContainer.appendChild(postElement);
                });
            } else {
                // Display error message
                document.getElementById('post-container').innerHTML = `<p>Error: ${data.error ? data.error.message : 'Unable to fetch posts.'}</p>`;
            }
        } catch (error) {
            // Log and display error
            console.error('Error fetching posts:', error);
            document.getElementById('post-container').innerHTML = `<p>Error: ${error.message}</p>`;
        }
    }

    fetchPosts(); // Fetch posts when the page loads
</script>

</body>
</html>
