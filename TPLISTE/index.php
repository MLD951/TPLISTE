<html> 
<?php    

 function getPosts(){
		$posts = [[1, "Martin","05/05/2020", "description 1"],
[2, "Jibril","06/05/2020", "description 2"],
[3, "Nessim","07/05/2020", "description de Nessim"],
[4, "Alexander","06/05/2020", "description d'Alexander"],
[5, "Sirine","06/05/2020", "description de Sirine"],];	
		return $posts;
 }	



//récupérer la liste des postes grâce à la fonction puis afficher la sous forme de tableau

	$posts=getPosts();
    foreach ($posts as $post) {
        ?>

        <div> <center>
		<style>
		table, th, td {
		  border:1px solid black;
		}
		</style>
		<table style="width:40%">
		  <tr>
		    <th> id </th>
		    <th> prénom </th>
		    <th> date </th>
		    <th> description</th>
		  </tr>
		  <tr>
		    
		    <td> <center> <?php echo $post[1]; ?> </center> </td>
		    <td> <center> <?php echo $post[2]; ?> </center> </td>
		    <td> <center> <?php echo $post[3]; ?> </center> </td>
		  </tr>
		</table>
		 <?php } ?> 

</html>
