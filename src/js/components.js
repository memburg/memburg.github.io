'use strict';

const loadComponent = async componentName => {
    try {
        const response = await fetch(`./src/components/${componentName}.html`);
        const textData = await response.text();
        // Manipulate text data here
        console.log(textData);
        return textData; // Returning the text data
    } catch (error) {
        console.error('Error fetching the data:', error);
        return null;
    }
};