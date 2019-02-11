/*
18. Напишите на JavaScript es6+ наиболее быструю функцию getFatDiv, которая вернет HTMLElement самого "толстого" DIV-элемента на произвольной странице или NULL, если нет ни одного DIV элемента на странице. Под "толстым" понимается количество вложенных элементов. Например, DIV у которого 450 дочерних элементов будет менее толстым, чем DIV, у которого 500 вложенных элементов. 
 */
function getFatDiv(tag = "div") {
    let elements = document.getElementsByTagName(tag);
    if (elements.length == 0) {
        // console.log(elements.length);
        return null;
    }
    // преобразование объекта в массив для дальнейшей обработки
    let elementsArr = Array.from(elements);

    function compareChildCount(elemA, elemB) {
        return elemA.childElementCount - elemB.childElementCount;
    }

    elementsArr.sort(compareChildCount).reverse();
    // console.log(elementsArr[0]);
    return elementsArr[0];
}