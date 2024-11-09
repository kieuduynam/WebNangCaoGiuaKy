function Init(containerCLass,total) {
    
    var currentSide = "card-1";
    var index = Number(currentSide.charAt(currentSide.length - 1));

    var container = document.querySelector(containerCLass);
    
    var btnLeft = container.querySelector("#left-prev");
    var btnRight = container.querySelector("#right-next");

    btnLeft.addEventListener("click", function () {
        
        if (index > 1) {
            index = index - 1;
            var newSide = currentSide.slice(0, -1) + index;
            showNews(index, container);
            currentSide = newSide;
        }
    });

    btnRight.addEventListener("click", function () {

        if (index < total - 3) {
            index = index + 1;
            var newSide = currentSide.slice(0, -1) + index;
            showNews(index, container);
            currentSide = newSide;
        }
    });

    function showNews(index, container) {
        container.scrollLeft = (index - 1) * 281;
    }
}


function InitDrag(containerCLass){
    const container = document.querySelector(containerCLass);
    let isDraging = false, isScroll = false;
    let startX, startScroll;
    
    container.addEventListener('mousedown', (e) => {
        isDraging = true;
        
        startX = e.clientX;
        startScroll = container.scrollLeft;
    });
    
    container.addEventListener('mousemove', (e) => {
        e.preventDefault();
        if(!isDraging) return;

        const d = e.clientX - startX;
        if(Math.abs(d) > 0){
            isScroll = true;  
        }else
            isScroll = false;

        container.scrollLeft = startScroll - d; 
    });

    container.addEventListener('mouseup', () => {
        isDraging = false;
        if(isScroll){
            e.preventDefault();
        }
    });

    container.addEventListener('click', (e)=> {
           if(isScroll)
              e.preventDefault();
    })
}

Init(".container-7_1 .khoi-anh",8);
Init(".container-7_2 .khoi-anh", 5);


InitDrag(".container-7_1 .khoi-anh");
InitDrag(".container-7_2 .khoi-anh");