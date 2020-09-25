'use strict';
//get all the tabs and tab content elements by its ID
const tab1 = document.getElementById('tab-1'),
      tab2 = document.getElementById('tab-2'),
      tab3 = document.getElementById('tab-3'),
      tabsContent = document.querySelector('#tabsContent');

//define content of tabs
const contentOfTabs = {
    "tab-1" : "tab 1 content",
    "tab-2" : "tab 2 content",
    "tab-3" : "tab 3 content"
};


//put the listeners on the tabs
tab1.addEventListener('click', () => {
    switchTabs(tab1);
});

tab2.addEventListener('click', () => {
    switchTabs(tab2);
});

tab3.addEventListener('click', () => {
    switchTabs(tab3);
});

//define the function which actually does the job
const switchTabs = (tabID) => {
    //get current active tab
    const tabBtnActive = document.querySelector('.tabs__btn--active');
          
    //remove bg color active from current active tab
    tabBtnActive.classList.toggle('tabs__btn--active');
    
    //set bg color active to new active tab
    tabID.classList.toggle('tabs__btn--active');
    
    //set content from the content object
    tabsContent.innerHTML = contentOfTabs[tabID.id];
};

