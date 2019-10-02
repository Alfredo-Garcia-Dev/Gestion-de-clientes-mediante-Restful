$(function() { 
  $('#miForm').on('submit', function(e) { 
    e.preventDefault();
  var jsonData=$(this).serializeArray()
    .reduce(function(a, z) { a[z.name] = z.value; return a; }, {});
    console.log(jsonData);
  });
});