# OSRE Backend real estate assessment

Your assessment is to make a properties manageable.

Make sure all business logic is implemented.

Implement the following business logic with collaborating objects. 

## Business rules

### Property & Occupants
 - Properties require a postal code in the following format: 6 long, first 4 digits and last 2 alphabetic characters
 - Properties have an availability: available, unavailable, soon_available
 - Properties have a minimal length of occupation and an optional maximum
 - Properties have a minimal notice period
 - Properties can have an occupant
 - Occupants can give notice when they want to stop occupying the property
 - Occupants can't give notice until they occupied the minimal period
 - Once an occupant has given notice, a month before they stop occupying the property it becomes soon_available
 - Properties become soon_available one month before the maximum occupation length
 - Properties can be managed by agents
 
### Portfolio
 - Make it possible to group a set of properties in a portfolio
 - A portfolio can't have duplicate properties
 - It should not be possible for a property to be in multiple portfolio's
 - Portfolio's can be managed by agents

### Overview
 - Make a list of all properties
 - Agents should only see properties they manage
 - Filterable by portfolio
 - Filterable by availability
 
Don't use persistence to make the business rules work.
 
## Bonus
 
 - An agent can only manage properties with postal codes that match with the first 4 digits
 - Make a list of all properties that will soon require attention
 - Test your implementation

## Help

If you have any questions or something is unclear reply to the email you got this assessment in.

## Sending in the assignment

Zip the entire folder (add .git) and reply to the email you got this assessment.
