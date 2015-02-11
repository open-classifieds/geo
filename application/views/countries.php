<div class="row marketing">

<ul class="nav nav-tabs nav-justified">   
<?foreach ($letters as $l=>$c):?>
    <li><a title="<?=$c?> countries" href="<?=Route::URL('countries')?>#<?=strtoupper($l)?>"><?=strtoupper($l)?></a></li>
<?endforeach?>
</ul>

<?$letter = '';?>
<?foreach ($countries as $country):?>
    <?if ($country->name[0]!=$letter):
        $letter=$country->name[0];
    ?>  
    <div class="clearfix"></div>
    <div class="col-lg-12">
        <h2 id="<?=strtoupper($letter)?>"><?=strtoupper($letter)?> <small><?=$letters[$letter]?> countries</small></h2>
    </div>
    <?endif?>


    <div class="col-lg-4">
        <h4><a href="<?=Route::URL('country',array('country' => $country->seoname))?>"><?=$country->name?></a></h4>
        <p><?print_r($country)?></p>
    </div>
<?endforeach?>

</div>