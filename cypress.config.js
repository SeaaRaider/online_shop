const { defineConfig } = require("cypress");

module.exports = defineConfig({
  viewportHeight:1080,
  viewportWidth:1920,
  e2e: {
    baseUrl: 'http://127.0.0.1:5500/account/',
    excludeSpecPattern: ['**/1-getting-started', '**/2-advanced-examples'],
    setupNodeEvents(on, config) {
      // implement node event listeners here
    },
  },
});
