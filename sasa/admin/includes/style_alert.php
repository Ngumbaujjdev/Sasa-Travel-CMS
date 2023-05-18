<style>
/* Alert styles */
.alert {
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 15px;
    font-size: 18px;
    color: #fff;
    text-align: center;
}

/* Success alert styles */
.success {
    background-color: #4CAF50;
}

/* Close button styles */
.closebtn {
    margin-left: 15px;
    color: #fff;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: #000;
}
</style>

<script>
// Get the close button
var close = document.getElementsByClassName("closebtn");

// Loop through all close buttons
for (var i = 0; i < close.length; i++) {
    // When someone clicks on a close button
    close[i].onclick = function() {
        // Get the parent of the button (the alert box) and hide it
        var div = this.parentElement;
        div.style.display = "none";
    }
}
</script>