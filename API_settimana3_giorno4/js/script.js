const urlAPI = 'http://localhost/back-end/sito_settimana3_giorno4/wp/wp-json/wp/v2/';

if(document.location.pathname === '/posts.html') {
    // Get Posts page
    fetch(urlAPI+'posts')
        .then(response => response.json())
        .then(json => createPostPage(json))
} else {
    // Get Home page
    fetch(urlAPI)
    .then(response => response.json())
    .then(json => console.log(json))
}

// Get Posts page
function createPostPage(posts) {
    //console.log(posts)
    posts.forEach(post => {
        let card = document.createElement('div');
        card.className = "card my-3";

        let cardHeader = document.createElement('div')
        cardHeader.className = "card-header";
        cardHeader.innerText = '';

        post.categories.forEach(category => {
            let promise = getCategories(category);
            promise.then(category => cardHeader.innerText += category.name + ', ');
        })
        
        
        let cardBody = document.createElement('div');
        cardBody.className = "card-body";

        let title = document.createElement('h5');
        title.className = "card-title";
        title.innerText = post.title.rendered;

        let excerpt = document.createElement('div');
        excerpt.className = "card-text";
        excerpt.innerHTML = post.excerpt.rendered;

       /*  let author = document.createElement('p');
        author.className = "card-text";
        let user = getUsers(post.author);
        user.then(u => {
            author.innerHTML = '<img src="' + u.avatar_urls["24"] + '" />';
            author.innerHTML += ' <strong>By: <a href="author.html?authorId=' + u.id + '">' + u.name + '</a></strong>';
        }) */

        let detail = document.createElement('a');
        detail.className = 'btn btn-dark';
        detail.href = '#';
        detail.textContent = 'Dettaglio'

        cardBody.appendChild(title);
        cardBody.appendChild(excerpt);
        //cardBody.appendChild(author);
        cardBody.appendChild(detail);

        card.appendChild(cardHeader);
        card.appendChild(cardBody);

        document.querySelector('div.posts').appendChild(card);
        console.log(post)
        
        
    })
}


async function getCategories(id) {
    let promise = await fetch(urlAPI+'categories/'+id)
    return promise.json();
}