"use strict";

const loadComponent = async componentName => {
    try {
        const response = await fetch(`./src/components/${componentName}.php`);
        const textData = await response.text();
        return textData; // Returning the text data
    } catch (error) {
        console.error('Error fetching the data:', error);
        return null;
    }
};