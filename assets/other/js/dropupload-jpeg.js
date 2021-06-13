const base_url = "http://localhost/";
const uploads_path = "assets/uploads/";
const err_icon_path="assets/other/js/icons/error.png";
const img_background_path="assets/theme/images/compress-background2.png";

function fileIcon(name) {
    if (name.match(/\.jpe?g|png|gif/)) {
        return base_url+uploads_path+name;
    }
    else
    return base_url+err_icon_path;
}

const fileInput = document.querySelector('.dropzone-form input'),
    dropzoneForm = document.querySelector('.dropzone-form'),
    result = document.querySelector('.dropzone-result'),
    resultText = document.querySelector('.dropzone-result-text');
let files = [];


function add_item(item) {
    result.appendChild(item);
    result.insertBefore(result, result.childNodes[result]);
}


function fileUpload(index,item) {
    const {file, el} = files[index]


    if (file.size > MAX_UPLOAD_SIZE || !file.name.match(/\.jpe?g|png|gif/) ) {

        el.classList.add('error');
        el.querySelector('.error-text').innerHTML = 'Geçerisiz dosya formatı veya boyutu !';
        result.appendChild(item);

        if (index + 1 < files.length) {
            fileUpload(index + 1)
        } else {
            resultText.innerText = 'Görüntüler başarıyla yüklendi ve Sıkıştırıldı !'
            resultText.classList.add('success')
        }

    } else {

        const formData = new FormData()
        formData.append('file', file)

        el.classList.add('current')
        resultText.classList.remove('success')
        resultText.innerText = `Dosyalar yükleniyor.. (${index + 1}/${files.length})`

        const request = new XMLHttpRequest()

        request.addEventListener('error', function() {
            el.classList.add('error');
            el.querySelector('.error-text').innerText = 'Dosya yükleme işlemi iptal edildi.';
        });

        request.addEventListener('load', function() {
            const response = JSON.parse(this.response);

            if (response.error) {
                el.classList.add('error');
                /*console.log(el.childNodes[0]);*/
                el.querySelector('.preview_img').src = response.error_img;
                el.querySelector('.error-text').innerText = response.msg;
                result.append(item);
            }

            if (response.success) {
                el.classList.remove('current')
                el.classList.add('success')
                //console.log(item);
                //console.log(response.compress_preview_img);

                //SIKIŞTIRILAN GÖRÜNTÜ ÖN İZLEME SAĞ
                el.querySelector(".kompress_result").innerHTML="Sıkıştırılmış Boyut : "+response.compressed_size+" KB";


                el.querySelector(".kazanc").innerHTML="Boyuttan Kazanç : "+(response.preview_size-response.compressed_size)+" KB";
                el.querySelector(".kazanc").style.backgroundColor="green";

                el.querySelector(".compress_preview_img").src=response.compress_preview_img;
                el.querySelector(".compress_preview_img").onclick= function() {
                    var tab = window.open('about:blank', '_blank','scrollbars=1,height=650,width=1050');
                    tab.document.write('<iframe src="' +response.compress_preview_img + '" frameborder="0" style="border:0; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%;" allowfullscreen></iframe>');
                    tab.document.close();
                }

                //İNDİR BUTONU
                el.querySelector(".compress-results a").href=response.compress_preview_img;
                el.querySelector(".compress-results a").download="İMCOmpressed-"+response.file;

                // ÖN İZLEME SOL
                el.querySelector(".preview_img").src=fileIcon(file.name);

                    result.insertBefore(item,result.childNodes[0]);
            }

            if (index + 1 < files.length) {
                fileUpload(index + 1)
            } else {
                // yükleme işlemi bitmiş
                resultText.innerText = 'Görüntüler başarıyla yüklendi ve Sıkıştırıldı !'
                resultText.classList.add('success')
            }
        })

        request.upload.addEventListener('progress', function(e) {
            let percent = (e.loaded / e.total) * 100;
            el.querySelector('.bar span').style.width = percent + '%';
        })


        let level = document.querySelector('input[type="range"]').value;
        //console.log("Sıkıştırma Oranı",elem);

        request.open('POST', 'http://localhost/imco/jpeg/push/'+level);
        request.send(formData)


    }

}




dropzoneForm.addEventListener('dragenter', () => dropzoneForm.classList.add('active'));
['dragleave', 'drop'].forEach(method => {
    dropzoneForm.addEventListener(method, () => dropzoneForm.classList.remove('active'))
})

fileInput.addEventListener('change', function() {
    files = [];

    [...this.files].map(file => {

        const item = document.createElement('div');
        //console.log(file);

        item.className = 'file';
        item.innerHTML = `<div class="icon">
            <img onclick="window.open(this.src, '_blank','scrollbars=1,height=650,width=1050');" class="preview_img" src="${fileIcon(file.name)}" alt="Yüklenen Görüntü">
        </div>
        <div class="file-inner">
            <div class="title">${file.name}</div>
            <div class="bar"> <span style="width: 0%"></span> </div>
            
            <div class="error-text"></div>
            <button onclick="abortUpload(this)" class="abort-btn">Yüklemeyi İptal Et</button>
        </div>
        
        <div class="compressed" style="background-image: url(${base_url}${img_background_path});">
            <div class="compress-results">
             Orjinal Boyut : ${file.size} KB<br>
             <div class="kompress_result"></div><br>
            </div>
            <img class="compress_preview_img" src="" alt="Sıkıştırılmış Görüntü">
            <div class="compress-results">
            <p class="kazanc"></p>
            <a class="img-downbutton"  download>İNDİR</a>
            <div>
        
        </div>
       
       </div>
        `;

        files.push({file,el: item});

    })
    fileUpload(0,files[0].el)

})