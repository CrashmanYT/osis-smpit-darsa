// Load data from json file
const gallery_data = fetch("../pages/gallery_data.json")
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
        for (let gallery in data){
            // create a card for each gallery
            let col_card = document.createElement("div");
            let card = document.createElement("div");
            card.classList.add("card", "h-100")
            card.setAttribute("data-aos", "fade-down");
            card.setAttribute("data-aos-duration", "1000");
            col_card.classList.add("col");
            let img = document.createElement("img")
            img.src = data[gallery].image;
            img.classList.add("card-img-top");
            let card_body = document.createElement("div");
            card_body.classList.add("card-body");
            let card_title = document.createElement("h5");
            card_title.classList.add("card-title");
            card_title.innerHTML = data[gallery].title;
            let card_text = document.createElement("p");
            card_text.classList.add("card-text");
            card_text.innerHTML = data[gallery].description;
            let card_footer = document.createElement("div");
            card_footer.classList.add("card-footer");
            let text_muted = document.createElement("small");
            text_muted.classList.add("text-muted");
            text_muted.innerHTML = data[gallery].date;
            card_footer.appendChild(text_muted);
            card_body.appendChild(card_title);
            card_body.appendChild(card_text);
            card.appendChild(img);
            card.appendChild(card_body);
            card.appendChild(card_footer);

            col_card.appendChild(card);
            let row = document.getElementsByClassName("row")[0];
            row.appendChild(col_card);
        }
        return data;
    })


