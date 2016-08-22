<div class="loader"></div>
<style>
    .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('http://i.imgur.com/oqGYEHg.gif') 50% 50% no-repeat rgb(255,255,255);
    }
</style>
<script type="text/javascript">
    $(window).load(function() {
        $(".loader").fadeOut("fast");
    })

    setTimeout(function() {
        $('.loader').fadeOut('fast');
    }, 5000);
</script>
