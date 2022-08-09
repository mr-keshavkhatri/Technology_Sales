<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4 mb-4">
            <div class="topic-tags d-flex">
                <div>
                    <h4 class="text-capitalize"><b>topic tags:</b></h4>
                </div>
                <div class="col d-flex title-tags" id="tag">
                    <li><a class="text-capitalize vertical-middle tagline" href="news.php">news</a></li>
                    <li><a class="text-capitalize vertical-middle tagline" href="notice.php">notices</a></li>
                    <li><a class="text-capitalize vertical-middle tagline" href="event.php">events</a></li>
                    <li><a class="text-capitalize vertical-middle tagline" href="news_letter.php">news letter</a></li>
                    <li><a class="text-capitalize vertical-middle tagline" href="new_launch.php">new launches</a></li>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('a');
    const menuLength = menuItem.length
    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === currentLocation) {
            menuItem[i].className = "active"
        }
    }
</script>