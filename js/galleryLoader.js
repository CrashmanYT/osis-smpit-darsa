
// Load data from json file
const gallery_data = fetch("../settings/gallery_data.json")
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
        for (let gallery in data){
            // create a card for each gallery
                $(document).ready(function() {
                    $(".row").append(`
                <div class="col-sm">
                <div class="card h-100 aos-init" data-aos="fade-down" data-aos-duration="1000">
                <img src="${data[gallery].image}" class="card-img-top lazyload" data-src="${data[gallery].image}">
                <div class="card-body">
                <h5 class="card-title">${data[gallery].title}</h5>
                <p class="card-text">${data[gallery].description}</p>
                </div>
                <div class="card-footer"><small class="text-muted">${data[gallery].date}</small></div></div></div>
                `)
                })
        }
        return data;
    })


