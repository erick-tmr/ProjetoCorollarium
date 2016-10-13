<?php
    require_once 'class/ViewConstructor.php';
    $constructor = ViewConstructor::getInstance();
    $jsFiles = $constructor->getJsFiles();
?>
        <footer class="blog-footer">
              <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
              <p>
                <a href="#">Back to top</a>
              </p>
        </footer>

        <?php foreach ($jsFiles as $jsFilePath) :?>
            <script src="<?=$jsFilePath?>"></script>
        <?php endforeach; ?>
    </body>
</html>