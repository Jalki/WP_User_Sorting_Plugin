const fs = require('fs');
const path = require('path');

var data;
async function GetAPI(data){
  fetch('https://jsonplaceholder.typicode.com/todos/1', {method: 'Get'})
    .then(response=> response.json())
    return response.json()
    .catch(error=> {
      console.log("error!");
      console.error(error);
    });

}
  const jsonData = JSON.stringify(data);
  const filePath = path.join(process.cwd(), 'JSONData.json');
  fs.writeFile(filePath, jsonData, (err) =>{
    if(err){
      console.error(err);
    } else{
      console.log('File written!')
    }
  });