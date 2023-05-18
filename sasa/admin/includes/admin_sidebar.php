<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<aside class="sidebar">
    <div class="title">
        <h2>sasa <span>travel</span></h2>
    </div>
    <div class="nav">
        <a href="index.php">Dashboard</a>
        <div class="inline">
            <p>Packages</p>
            <span class="material-symbols-outlined">arrow_drop_down</span>
        </div>
        <div class="dropdown">
            <a href="packages.php">view Packages</a>
            <a href="packages.php?source=add_package">Add package</a>
        </div>
        <a href="reviews.php">Reviews</a>
        <a href="users.php">Users</a>
        <a href='users.php?source=add_user'>Add users</a>
    </div>
</aside>

<script>
const dropdown = document.querySelector('.dropdown')
const dropBtn = document.querySelector('.inline')
const rotate = document.querySelector('.material-symbols-outlined')

dropBtn.addEventListener('click', () => {
    dropdown.classList.toggle("dropdown-active")

})
dropBtn.addEventListener('click', () => {
    rotate.classList.toggle("rotate-180")

})
</script>