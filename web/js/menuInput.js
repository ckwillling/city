
  function insertInsideLink(link_value)
  {
    var menu = document.getElementById('menutype');

    if(menu.value == 0)
    {
      var link = document.getElementById('menulink');
      link.value = link_value;
    }
  }

  function hello(){
      alert('hello');
  }
