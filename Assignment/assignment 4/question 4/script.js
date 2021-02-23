var links = document.querySelectorAll('a');
for (link of links) 
{ console.log(link.href);
  document.getElementById('display').innerHTML+= link.href + "<br>";
}