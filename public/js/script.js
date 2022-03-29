// $(document).ready(function() {
//     $('#example').DataTable();
// } );

function deleteItem(url)
{
   var resp = confirm("Do you want to delete this item???");
   if (resp == true) {
      // do something
      // href="{{ url('delete/user/'.$user->id) }}"
      window.open(url, "_self");
   } 
   else {
      //do something
     false;
   }
}