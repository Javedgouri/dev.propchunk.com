<script>

function newContent()
{
    
    $("#y").load("<?php echo site_url('Home/profile');?>");
}

function newContent1()
{
    
    $("#y").load("<?php echo site_url('Home/changepass1');?>");
}
</script>
<style>
li.list-group-item.leftalign{
    padding-left: 0px;
    text-align: left;
}
</style>

<section id="contact" class="home-section text-center">
         <div class="container">

    <div class=" col-lg-2 col-md-3 pull-left" style="padding:0px;" align:left;>
    <address >
                  <ul class="list-group" >
                            <li class="list-group-item leftalign"><a onclick='newContent()' style="cursor:pointer;">Profile</a></li>
                            <li class="list-group-item leftalign"><a href="#" style="cursor:pointer;">Projects Backed</a></li>
                            <li class="list-group-item  leftalign"><a href="#" style="cursor:pointer;">My Income</a></li>
                            <li class="list-group-item leftalign"><a href="#" style="cursor:pointer;">My Documents</a></li>
                            <li class="list-group-item leftalign"><a onclick='newContent1()' style="cursor:pointer;">Change Password</a></li>
                    </ul>   
                </address>                  

 </div>
 <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12" id="y" style=" overflow:hidden;" >
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
 </div>
</div>