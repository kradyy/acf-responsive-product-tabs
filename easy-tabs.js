const elementsExists = (element) => {
    if ('undefined' != typeof (element) && null != element) {
        return true;
    }

    return false;
};

let tabsContainer = document.getElementsByClassName('product-tabs');

if (elementsExists(tabsContainer)) {

    document.addEventListener("DOMContentLoaded", () => {

        let productTabs = document.querySelectorAll(".product-tabs .navigation li");
        let tabContent = document.querySelectorAll('.product-tabs .tab-content');

        if (productTabs && tabContent) {
            for (tabs of productTabs) {
                tabs.addEventListener('click', (e) => {
                    e.preventDefault();

                    let tabID = e.currentTarget.getElementsByTagName('a')[0].getAttribute("href");
                    let target = document.getElementById(tabID.slice(1));

                    for (const ct of tabContent) {
                        ct.style.display = 'none';
                    }

                    for (const tbs of productTabs) {
                        tbs.classList.remove('selected');
                    }

                    target.style.display = 'block';

                    e.currentTarget.classList.toggle("selected");
                });

                // Accordions
                let accordions = document.querySelectorAll('.product-tabs .accordion-tab');

                for (accordion of accordions) {
                    accordion.addEventListener('click', (e) => {
                        let currentTab = e.currentTarget.getAttribute('aria-controls');

                        // Trigger click
                        document.querySelector('.product-tabs .navigation li[aria-controls="' + currentTab + '"] > a').click();

                        // Close previous
                        for (prevAccordion of accordions) {
                            prevAccordion.classList.remove('active');
                        }

                        // Open current
                        e.currentTarget.classList.toggle("active");
                        let panel = e.currentTarget.nextElementSibling;

                        if (panel.style.maxHeight) {
                            panel.style.maxHeight = null;
                        } else {
                            panel.style.maxHeight = panel.scrollHeight + "px";
                            panel.style.display = "block";
                        }
                    });
                }
            }
            // Show first tab by default (optional)
            productTabs[0].click();
            tabContent[0].style.display = 'block';
            tabContent[0].style.maxHeight = '100%';
        }
    });
}
