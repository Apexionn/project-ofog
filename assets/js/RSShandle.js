$.ajax({
    url      : './feed.json',
    dataType : 'json',
    success  : function (data) {
        // console.log(data);
        var datas = Object.values(data);
        // console.log(datas);
        for (var i = datas.length - 1; i >= 0; i--) {
            var h = document.getElementById("RSSarticle");
            var dataarticle = datas[i];
            // console.log(dataarticle.title);
            // console.log(dataarticle.enclosure["@attributes"].url);
            var linkimg = (dataarticle.cover_image && dataarticle.cover_image.length > 0) ? dataarticle.cover_image : "https://picsum.photos/id/1/600/400";
            var regionalhtml = "";
            var convertregional = {
                als: "Alam Sutera",
                bdg: "Bandung",
                kmg: "Kemanggisan",
                mlg: "Malang",
                sny: "Senayan"
            }
            for (var j = 0; j < dataarticle.regional.length; j++){
                if (j > 0) regionalhtml += " | ";
                regionalhtml += convertregional[dataarticle.regional[j]];
            }
            var categorieshtml = "";
            if (dataarticle.categories.length == 0) dataarticle.categories.push(dataarticle.content_type);
            for (var j = 0; j < dataarticle.categories.length; j++){
                if (j > 0) categorieshtml += " ";
                categorieshtml += '<span class="badge bg-light text-dark text-capitalize">' + dataarticle.categories[j] + '</span>';
            }
            var template = `
            <a href="${dataarticle.url}?utm_source=himti.or.id&utm_campaign=himti2021" class="card article bg-dark text-white p-0" style="border-radius: 1em;">
                <img src="${linkimg}" class="card-img" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.25); border-radius: 1em;">
                <div class="card-img-overlay" style="margin-top: auto">
                    <p class="card-text fw-bold">${regionalhtml}</p>
                    <h4 class="card-title fw-bold mb-3">${dataarticle.title}</h4>
                    <p class="card-text fw-bold">${new Date(dataarticle.timestamp*1000).toDateString()}</p>
                    <p class="card-text">${categorieshtml}</p>
                </div>
            </a>
            `;

            h.insertAdjacentHTML("beforeend", template);
        }
    }
  });
  
