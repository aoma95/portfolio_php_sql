<?php ob_start(); ?>
<nav id="menu" class="navbar navbar-dark bg-dark navbar-expand-lg navbar-fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <div class="navbar-header">
            <a class="nav-brand" href="index.php">Dan ESPOSITO</a>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?page=cv">Curriculum Vitae</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=projet">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gergergreregrg">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?php $header_content = ob_get_clean(); ?>