<div class="jumbotron">
<h2>Open Source World Locations DataBase and API</h2>
<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p><a class="btn btn-lg btn-success" href="#" role="button"><span class="glyphicon glyphicon-globe"></span> Browse Countries</a></p>

</div>

<div class="row marketing">
<div class="col-lg-6">

  <h4>Hosted By</h4>
  <p>Vultr</p>

  <h4>Original World DB</h4>
  <p><a href="https://code.google.com/p/worlddb/">Worlddb</a>.</p>

  <h4>Tech behind</h4>
  <p>Kohana, bootstrap, jquery, serverpilot, backups codeguard,</p>

</div>

<div class="col-lg-6">
    <h4>Chained selects</h4>

    <select id="country" name="country">
      <option value="">--</option>
    </select>
    <br>
    <select id="region" name="region">
      <option value="">--</option>
    </select>
    <br>
    <select id="city" name="city">
      <option value="">--</option>
    </select>
    <br>

    Chained selects by <a href="http://www.appelsiini.net/projects/chained">appelsiini</a>

    <script type="text/javascript">
    $.getJSON("<?=Route::URL('api',array('action'=>'countries'))?>?chained=1", function(result) {
        var options = $("#country");
        $.each(result, function(item,value) {
            options.append(new Option(value,item));
        });
    });

    $("#region").remoteChained({
        parents : "#country",
        url : "<?=Route::URL('api',array('action'=>'regions'))?>?chained=1"
    });

    $("#city").remoteChained({
        parents : "#region",
        url : "<?=Route::URL('api',array('action'=>'cities'))?>?chained=1"
    });
    </script>

    <br>
    Code
    <br>
    <textarea>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/jquery.chained/0.9.9/jquery.chained.remote.min.js"></script>
        <select id="country" name="country">
          <option value="">--</option>
        </select>
        <select id="region" name="region">
          <option value="">--</option>
        </select>
        <select id="city" name="city">
          <option value="">--</option>
        </select>
        <script type="text/javascript">
        $.getJSON("http://geo.open-classifieds.com/api/countries.json?chained=1", function(result) {
            var options = $("#country");
            $.each(result, function(item,value) {
                options.append(new Option(value,item));
            });
        });

        $("#region").remoteChained({
            parents : "#country",
            url : "http://geo.open-classifieds.com/api/regions.json?chained=1"
        });

        $("#city").remoteChained({
            parents : "#region",
            url : "http://geo.open-classifieds.com/api/cities.json?chained=1"
        });
        </script>
    </textarea>
</div>
</div>