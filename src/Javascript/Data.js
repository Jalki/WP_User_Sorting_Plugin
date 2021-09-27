
var data 
function GetData(data){
  fetch('https://jsonplaceholder.typicode.com/todos/1', {method: 'Get'})
    .then(response=> response.json())

}

function SaveData(data){
  const finished = (error) =>{
    if(error){
      console.error(error)
      return;
    }
  }
  const jsonData = JSON.stringify(data)
  fs.writeFile('data.json', jsonData, finished)
}