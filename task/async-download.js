// producing
// callback
// function showDownload(result) {
//     console.log("Download Selesai");
//     console.log("Hasil Download: " + result);
// }

// function download(callShowDownload) {
//     setTimeout(function() {
//         const result = "Windows-10.exe";
//         callShowDownload(result);
//     }, 3000);
// }

// download(showDowload);


// producing
// promise
const showDownload = () => {
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve("Download Selesai");
        }, 3000);
    });
};

const result = "Windows-10.exe";
const download = () => {
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve("Hasil Download : " + result);
        }, 3000);
    });
};

// consuning async-await
const main = async () => {
    console.log(await showDownload());
    console.log(await download());
}

// consuning promise
// const main = () => {
//     showDownload()
//     .then((res) => {
//         console.log(res);
//         return download();
//    })
// };

main();