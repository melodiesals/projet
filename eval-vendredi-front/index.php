<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les News</title>
    <link href="index.css" rel="stylesheet">
</head>
<body>
  
    <h1><span id="titre"></span></h1>
    <p><span id="contenu"></span></p>
    <div><span id="auteur"></span></div>
    <button>Voir d'autres articles</button>

<script>
    
var url = 'http://newsapi.org/v2/top-headlines?' +
          'country=fr&' +
          'apiKey=1b718d0da3df42eaa448e681e6fef788';
var req = new Request(url);
fetch(req)
.then(function(response) {
    return response.json();
})
    
.then(function(data){
    const articles = data.articles
    const titre = data.articles[0].title
    const contenu = data.articles[0].content
    const autheur = data.articles[0].author


    const title = document.querySelector("h1");
    const content = document.querySelector("p");
    const author = document.querySelector("div");

    title.innerText += titre;
    content.innerText += contenu;
    author.innerText += autheur;


})

</script>

</body>
</html>
