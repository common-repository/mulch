<?php

echo "<iframe style=\"width:100%;height:720px;border=0;\"
src=\"https://mulch.revemarketing.com/?wp=1\"></iframe>";  


?>


<script type="text/javascript">
var $ = jQuery.noConflict();
var IDs;
window.addEventListener("message", function (event) {
	IDs = event.data + '';
	
    var storeIDs = IDs.split('--');
    var PID = storeIDs[0];
    var WID = storeIDs[1];
            if(WID != undefined) {
            console.log("received: " + IDs);
            $.ajax({
            method: "POST",
            data:{
                    action:'update_status',
                    pid: PID,
                    wid: WID
                },
                url: '<?php echo admin_url( 'admin-ajax.php' ) ?>',
                success:function(result){
                    console.log("result " + ":" +  result);
                },
                error:function(error){
                    console.log(error);
                }
            });
        }    

});

</script>
