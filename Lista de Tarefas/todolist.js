
function addTask () {

const taskInput = document.getElementById('taskInput');
const taskList = document.getElementById ('taskList');
const taskText = taskInput.value.trim();

const listItem = document.createElement('li');
listItem.textContent = taskText;
taskList.appendChild(listItem)

const removeButton = document.createElement('button');
removeButton.textContent = 'X';
removeButton.style.marginLeft = '10px';
removeButton.onclick = function () {
    taskList.removeChild(listItem);
};
listItem.appendChild(removeButton);
taskInput.value = ''
taskInput.focus();

}
