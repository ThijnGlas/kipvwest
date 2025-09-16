window.onload = function() {
    const search = new URLSearchParams(window.location.search).get('search');
    if(search) {
        const results = document.getElementById('results');
        if(results) {
            results.scrollIntoView({ behavior: 'instant',
                block: 'center' 
             });
            
        }
    }
}