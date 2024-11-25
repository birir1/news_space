<style>
    /* Custom styles */
    body {
        font-family: 'Times New Roman', Times, serif;
        padding-top: 60px; /* Offset the navbar */
    }
    .sidebar {
        position: fixed;
        top: 60px; /* Position below navbar */
        left: 0;
        width: 250px;
        height: 100%;
        background-color: #f8f9fa;
        padding: 20px;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        display: none;
    }
    .sidebar.show {
        display: block;
    }
    .content-section {
        margin-left: 270px; /* Space for sidebar */
        padding: 20px;
    }
    .post-card {
        margin-bottom: 30px;
    }
    .form-control, .form-select {
        font-family: 'Times New Roman', Times, serif;
    }
    h2, .card-title, .card-text {
        font-family: 'Times New Roman', Times, serif;
    }
    .post-actions {
        margin-top: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .comment-editor {
        margin-top: 15px;
        display: none;
    }
    .create-post-btn {
        display: block;
        margin-top: 20px;
    }
    .user-info {
        margin-top: 15px;
        font-size: 0.9rem;
        color: #555;
    }
    .comments-section {
        margin-top: 15px;
        padding-left: 20px;
        font-size: 0.9rem;
    }
    .comment-item {
        margin-bottom: 10px;
        font-size: 1rem;
        display: flex;
        align-items: center;
    }
    .comment-item img {
        margin-right: 10px;
    }
</style>

<!-- Sidebar for creating posts -->
<div class="sidebar" id="sidebar">
    <h3>Create New Post</h3>
    <form id="contentForm">
        <!-- Select Content Type -->
        <div class="mb-3">
            <label for="contentType" class="form-label">Select Content Type</label>
            <select id="contentType" class="form-select" required>
                <option value="video">Video</option>
                <option value="image">Image</option>
                <option value="post">Post</option>
            </select>
        </div>

        <!-- File Upload Section (only for Video or Image) -->
        <div id="fileUploadSection" class="mb-3">
            <label for="fileUpload" class="form-label">Upload Your File</label>
            <input type="file" class="form-control" id="fileUpload" accept="image/*,video/*">
        </div>

        <!-- Post Text Area (only for Post) -->
        <div id="postTextSection" class="mb-3" style="display: none;">
            <label for="postContent" class="form-label">Write Your Post</label>
            <textarea class="form-control" id="postContent" rows="4" placeholder="Write a brief post"></textarea>
        </div>

        <!-- Title and Description for Content (for Video/Image/Post) -->
        <div class="mb-3">
            <label for="contentTitle" class="form-label">Content Title</label>
            <input type="text" class="form-control" id="contentTitle" placeholder="Enter title for your content" required>
        </div>

        <div class="mb-3">
            <label for="contentDescription" class="form-label">Content Description</label>
            <textarea class="form-control" id="contentDescription" rows="4" placeholder="Write a brief description of your content" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit Content</button>
    </form>
</div>

<!-- Main Content Area to Display Posts -->
<div class="content-section">
    <div id="welcomeSection" class="container">
        <h2>Welcome to News Space!</h2>
        <p>Share your thoughts, videos, or images with the world!</p>
        <button class="btn btn-info create-post-btn" id="addPostBtn">Add New Post</button>
    </div>

    <div id="uploadedContent" class="container">
        <!-- New posts will appear here -->
    </div>
</div>

<!-- Add Bootstrap JS for form validation, etc. -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Show content sections based on selected type
    const contentTypeSelect = document.getElementById('contentType');
    const fileUploadSection = document.getElementById('fileUploadSection');
    const postTextSection = document.getElementById('postTextSection');
    const sidebar = document.getElementById('sidebar');
    const addPostBtn = document.getElementById('addPostBtn');
    const createPostBtn = document.querySelector('.create-post-btn');

    contentTypeSelect.addEventListener('change', function() {
        const contentType = contentTypeSelect.value;
        if (contentType === 'post') {
            fileUploadSection.style.display = 'none';  // Hide file upload section for posts
            postTextSection.style.display = 'block';  // Show post writing section
        } else {
            fileUploadSection.style.display = 'block';  // Show file upload section for video/image
            postTextSection.style.display = 'none';  // Hide post writing section
        }
    });

    // Toggle sidebar visibility
    addPostBtn.addEventListener('click', function() {
        sidebar.classList.toggle('show');
        createPostBtn.style.display = 'none';  // Hide the "Create New Post" button when the sidebar is visible
    });

    // Content upload functionality (video/image or post)
    const contentForm = document.getElementById('contentForm');
    const uploadedContentDiv = document.getElementById('uploadedContent');

    contentForm.addEventListener('submit', function(event) {
        event.preventDefault();  // Prevent form from reloading the page

        const contentType = contentTypeSelect.value;
        const contentTitle = document.getElementById('contentTitle').value;
        const contentDescription = document.getElementById('contentDescription').value;

        const userName = "User Name"; // This can be dynamically set based on the logged-in user
        const userAvatar = "https://via.placeholder.com/40"; // Placeholder avatar for now

        let contentHTML = `<div class="post-card card">
            <div class="card-body">
                <h5 class="card-title">${contentTitle}</h5>
                <p class="card-text">${contentDescription}</p>`;

        // Handle different content types (video/image/post)
        if (contentType === 'video') {
            const fileUpload = document.getElementById('fileUpload').files[0];
            contentHTML += `<video src="${URL.createObjectURL(fileUpload)}" class="card-img-top" controls></video>`;
        } else if (contentType === 'image') {
            const fileUpload = document.getElementById('fileUpload').files[0];
            contentHTML += `<img src="${URL.createObjectURL(fileUpload)}" class="card-img-top" alt="uploaded image">`;
        } else if (contentType === 'post') {
            const postContent = document.getElementById('postContent').value;
            contentHTML += `<p>${postContent}</p>`;
        }

        // Add user info and like/comment actions
        contentHTML += `
            <div class="user-info">
                <img src="${userAvatar}" alt="user avatar" class="rounded-circle" width="40" height="40">
                <span>${userName}</span>
            </div>
            <div class="post-actions">
                <button class="btn btn-outline-primary" onclick="incrementLikes(this)">Like <span class="like-count">0</span></button>
                <button class="btn btn-outline-secondary" onclick="showCommentEditor(this)">Comment</button>
            </div>
            <div class="comment-editor" style="display: none;">
                <textarea class="form-control" rows="3" placeholder="Write a comment..."></textarea>
                <button class="btn btn-primary mt-2" onclick="postComment(this)">Post Comment</button>
            </div>
            <div class="comments-section"></div>
        </div>
    </div>`;

        uploadedContentDiv.insertAdjacentHTML('beforeend', contentHTML);

        // Collapse sidebar and show the "Create New Post" button again
        sidebar.classList.remove('show');
        addPostBtn.style.display = 'block';

        // Reset form after submitting
        contentForm.reset();
        contentTypeSelect.dispatchEvent(new Event('change'));  // Reset to default state
    });

    // Function to increase like count
    function incrementLikes(button) {
        const likeCount = button.querySelector('.like-count');
        likeCount.textContent = parseInt(likeCount.textContent) + 1;
    }

    // Function to show comment editor
    function showCommentEditor(button) {
        const commentEditor = button.closest('.post-actions').nextElementSibling;
        commentEditor.style.display = commentEditor.style.display === 'block' ? 'none' : 'block';
    }

    // Function to post a comment
    function postComment(button) {
        const commentText = button.previousElementSibling.value;
        if (commentText) {
            const commentsSection = button.closest('.card').querySelector('.comments-section');
            const commentItem = document.createElement('div');
            const userName = "Commenter Name"; // This can be dynamically set based on the logged-in user
            const userAvatar = "https://via.placeholder.com/40"; // Placeholder avatar for now
            commentItem.classList.add('comment-item');
            commentItem.innerHTML = `
                <img src="${userAvatar}" alt="user avatar" class="rounded-circle" width="30" height="30">
                <span><strong>${userName}</strong>: ${commentText}</span>`;
            commentsSection.appendChild(commentItem);

            // Clear the comment input field
            button.previousElementSibling.value = '';
            button.closest('.comment-editor').style.display = 'none';
        }
    }
</script>