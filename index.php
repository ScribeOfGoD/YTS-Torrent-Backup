<html>
<head>
    <?php include './header.php'; ?>
    <title>YTS Torrent Backup</title>
</head>
<body>
<div class="container">
    <div class="search-sect">
      <h3> <a href="//condors.katmirrors.com">For Condors click here</a></h3>
      <h3> <a href="//ettv.katmirrors.com">For ETTV click here</a></h3>
        <a href="/">
            <img src="/images/logo-YTS-TB.png" align="center"/>
        </a>
    </div>
    <div class="search-sect">
        <form action="/search/" method="post">
            <input placeholder="I want to watch..." autocomplete="off" name="q" type="text"
                   class="hover-bottom big-search"/>
        </form>
    </div>
    <div class="years search-sect">
        <ul>
            <li><a href="/search/(2015)">2015</a></li>
            <li><a href="/search/(2014)">2014</a></li>
            <li><a href="/search/s(2013)">2013</a></li>
            <li><a href="/search/(2012)">2012</a></li>
        </ul>
    </div>

</div>
</body>
</html>
