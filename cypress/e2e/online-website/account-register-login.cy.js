/// <reference types="cypress" />



describe('Register user and log in', ()=>{

    it('Fill register form and submit', ()=>{

        cy.visit('account-login/register.html')
        cy.get('.username-cy').type('thisIsUser')
        cy.get('.email-cy').type('test-cy@gmail.com')
        cy.get('.password-cy').type('something12')
        cy.get('.passwordcon-cy').type('something12')
        cy.get('.submit-cy').click()

    })

    it('Fill login form with the same values and submit', ()=>{

        cy.visit('account-login/login.php')
        cy.get('.email-cy').type('test-cy@gmail.com')
        cy.get('.password-cy').type('something12')
        cy.get('.submit-cy').click()
    })
})