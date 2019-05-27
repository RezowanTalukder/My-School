<?php include 'inc/tutorial_header.php'; ?>
<div class="main">

<h1>Problem in Any Topic ?</h1>


	<div class="segment" style="margin-right:30px;">
		<img src="img/pro.png"/>
	</div>


	<div class="segment">
	<form action="" method="post">
		<table style="padding-left: 60px; padding-top: 25px">
		<tr>
           <td>Name:</td>
           <td><input type="text" name="name" id="name" required="" placeholder="Enter Name"></td>
         </tr>
         <tr>
             <td>E-mail:</td>
             <td><input name="email" id="email" type="text" required="" placeholder="Enter Email"></td>
         </tr>
		 <tr>
             <td>Catagory:</td>
             <td><input name="text" id="catagory" type="text" required="" placeholder="catagory"></td>
         </tr>


         <tr>
           <td>Description:</td>
           <td rowspan="2"><TEXTAREA id="description" required="" placeholder="short description"></TEXTAREA> </td>
         </tr>

         <tr>
         	<td>&nbsp</td>
         	<td>&nbsp</td>
         </tr>

         <tr>
         	<td>&nbsp</td>
         	<td>&nbsp</td>
         </tr>

         <tr>
           <td></td>
           <br>
           <td class="button_class"><input type="submit" id="getReq" value="Submit Request">
           </td>
         </tr>
       </table>
	   </form>

        <p style="font-size: 14px; text-align: center;"><span id="state"></span></p>
	</div>

</div>
<?php include 'inc/footer.php'; ?>