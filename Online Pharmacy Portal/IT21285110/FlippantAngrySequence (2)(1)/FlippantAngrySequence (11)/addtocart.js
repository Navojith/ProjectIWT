/*var additemid=0;
function addtocart(item){
  additemid+=1;
  var selecteditem=document.createElement('div');
  selecteditem.classlist.add('cartimg');
  selecteditem.setAttribute('id',additemid);
  var img=document.createElement('img');
  img.setAttribute('src',item.children[0].currentsrc);
  var title=document.createElement('div');
  title.innertext=item.children[1].innertext;
  var label=document.createElement('div');
  label.innertext=item.children[2].childen[0].innertext;
  var select=document.createElement('span');
  select.innertext=item.children[2].children[1].value;
  label.append(select)
  var cartitems=document.getelementbyId('title');
  selecteditem.append(img);
  selecteditem.append(title);
  selecteditem.append(label);
  cartitems.append(selecteditem);
  
}*/
var additemid=0;
function addtocart(item){
  var selecteditem=document.createElement('div');
  selecteditem.classlist.add('cartimg');
  selecteditem.setAttribute('id',additemid);
  var img=document.createElement('img');
   img.setAttribute('src',item.children[0].currentsrc);
  var cartitems=document.getelementbyId('title');
  selecteditem.append(img);
   cartitems.append(selecteditem);
}