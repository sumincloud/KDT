
const btn = document.getElementById('btn');
const d_btn = document.getElementById('delete_btn');
const addValue = document.getElementById('addValue');
let result = document.querySelector('ul');

//글 추가버튼 클릭시 내용출력하는 함수호출
btn.addEventListener('click', function(){
  addTo();
});

//전체삭제버튼 클릭시 전체삭제하는 함수호출
d_btn.addEventListener('click', function(){
  clearAll();
});

//내용추가 하는 함수
function addTo(){
  //alert('함수실행');
  if(addValue.value == false){ //값이 없다면
    alert('내용을 입력하세요.')
  }else{ //값이 있다면
    let list = document.createElement('li');
    let del = document.createElement('button');

    list.innerHTML = addValue.value; //li태그 추가

    result.appendChild(list); //li태그를 추가
    list.appendChild(del); //li태그 안에 버튼 추가

    //서식추가
    del.innerText="X";
    del.style.fontSize="20px";
    del.style.border="none";
    del.style.float="right";
    del.style.right="17px";
    del.style.marginTop="10px";
    del.style.cursor="pointer";
    del.style.position="relative";

    addValue.value=''; //글입력 버튼 클릭시 기존 내용은 비우기
    addValue.focus(); //글입력창에 커서를 나오게 함(다시입력할 수 있도록)

    //마우스로 글 목록 클릭시 스타일 변화주기
    let i = 0;
    list.addEventListener('click',function(){
      if(i==0){
        list.style.textDecoration='line-through';
        list.style.color='gray';
        i=1;
      }else{
        list.style.textDecoration='none';
        list.style.color='#000';
        i=0;
      }
    });

    //삭제(X)버튼 누르면
    del.addEventListener('click',function(e){
      let li_remove = e.target.parentElement;
      li_remove.remove(); //부모를 삭제하라

    })

  }
}


//전체삭제 하는 함수
function clearAll(){
  //.todo_list의 자식요소인 li태그를 삭제
  if(confirm('버튼을 클릭 시 글 내용이 모두 삭제됩니다. 실행하시겠습니까?') == true){
    if(result.innerText == ''){
      alert('삭제할 글 목록이 없습니다.');
    }else{
      result.innerText='';
    }
  }else{
    return false;
  }
  
}