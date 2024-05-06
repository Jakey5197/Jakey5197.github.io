function get_ip(ip) {
    const fs = require('fs');

    user_ip = ip;

    fs.writeFile('data.txt', user_ip, err => {
        if(err){
            console.err;
        }
        return
    });
}