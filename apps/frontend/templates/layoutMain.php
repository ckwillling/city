<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Jobeet - Your best job board</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
</head>
<body>
<div id="container">
    <div id="header">
        <div class="content">
            <h1><a href="/job">
                    <img src="/legacy/images/logo.jpg" alt="Jobeet Job Board" />
                </a></h1>


        </div>
    </div>

    <div id="content">
        <?php if ($sf_user->hasFlash('notice')): ?>
            <div class="flash_notice">
                <?php echo $sf_user->getFlash('notice') ?>
            </div>
        <?php endif; ?>

        <?php if ($sf_user->hasFlash('error')): ?>
            <div class="flash_error">
                <?php echo $sf_user->getFlash('error') ?>
            </div>
        <?php endif; ?>

        <div id="menu">
          <?=link_to('main','@shopPage?shopId='.get_slot('shopId').'&pageId='.get_slot('mainPage')->getId())?>
          <? $menus = get_slot('menus') ; ?>
          <? foreach($menus as $menu): ?>
             <a href='<?=$menu->getMenuLink()?>'><?=$menu->getMenuname()?></a>
          <?endforeach;?>
        </div>

        <div class="content">
            <?php echo $sf_content ?>
        </div>
    </div>

    <div id="footer">
        <div class="content">
          <span class="symfony">
            <img src="/legacy/images/jobeet-mini.png" />
            powered by <a href="/">
                  <img src="/legacy/images/symfony.gif" alt="symfony framework" />
              </a>
          </span>
            <ul>
                <li><a href="">About Jobeet</a></li>
                <li class="feed"><a href="">Full feed</a></li>
                <li><a href="">Jobeet API</a></li>
                <li class="last"><a href="">Affiliates</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>