/// <reference types="cypress" />

describe('Navbar hyperlinks', ()=>{

    it('Hyperlinks Store-Account-Store', ()=>{
        cy.visit('account/account.html')
        cy.get('[href="account.html"]').click()
        cy.get('[href="/online_shop/index.html"]').click()
    })
})