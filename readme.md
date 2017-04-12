# Loan Alert Application

Hey thanks for taking on our programming challenge. Out of respect for your time, please work for 1-2 hours, but don't stress too hard. This is not a timed challenge, feel free to spend as little or as much time as you desire. I don’t expect you to finish this challenge (unless you really want to); it’s more to get a sense of your approach to programming. The people who get hired tend to show their *best* and *most elegant* work rather than their quickest or most feature-complete work.

## Objective

Write an application that emails loan alerts.

## Instructions

* Fork and clone this repo. It contains a Laravel 5.4 default installation.
* Implement the user story below
* Send a pull request to me ***along with your name*** when you're done or when it's been 2 hours. This step is super important; if you don't send a pull request, you definitely won't be hired.

## User Story

### Step 1: User visits site and inputs email address.

![Step 1](https://raw.githubusercontent.com/benallfree/scraper-spa-test/master/mockups/1.png)

### Step 2: User inputs loan alert criteria

![Step 2](https://raw.githubusercontent.com/benallfree/scraper-spa-test/master/mockups/2.png)

### Step 3: User reaches finishing stage

![Step 3](https://raw.githubusercontent.com/benallfree/scraper-spa-test/master/mockups/3.png)

### Step 4: User receives confirmation email

![Step 4](https://raw.githubusercontent.com/benallfree/scraper-spa-test/master/mockups/4.png)

### Step 5: Background Laravel process queries Zillow for rates and saves them to DB

![Step 1](https://raw.githubusercontent.com/benallfree/scraper-spa-test/master/mockups/5.png)

### Step 6: Background Laravel process monitors DB for new loan data and sends out alerts.

![Step 6](https://raw.githubusercontent.com/benallfree/scraper-spa-test/master/mockups/6.png)


## Bonus points (in order of WOW factor)

* Use of `composer` packages
* Make emails mobile responsive
* Use VueJS and SPA (single page application) for all UI. Communication via API only; no page postbacks or refreshes.
* Use of `yarn`, `webpack`, and `es6` in the build process
* PHP7 compatibility
* Caching the query results for 60 minutes


