/// <reference types="cypress" />

describe('Navbar hyperlinks', ()=>{

    it('Hyperlinks Store-Account-Store', ()=>{
        cy.visit('account.html')
        cy.get('[href="account.html"]').click()
        cy.get('[href="/index.html"]').click()
    })
})