# gokada code challenge

## Assertions for unit and feature testing

Starting with a list of assertions for TDD.

#### Verification
1. a_phone_number_is_required_to_initiate_a_phone_verification
2. a_verification_call_expires
3. a_new_user_must_be_redirected_to_the_signup_page

#### Users
1. a_user_can_search_for_addresses
2. a_user_can_submit_latlong_to_fetch_addresses

#### Waypoints
1. a_waypoint_must_have_two_addresses
2. a_waypoint_must_have_estimates
3. a_waypoint_belongs_to_an_order
4. for_multi_waypoints_a_waypoints_drop_should_match_next_waypoints_pickup_location

#### Orders
1. an_order_must_have_atleast_one_waypoint
2. an_order_can_have_max_ten_waypoints
3. an_order_has_a_driver
4. an_order_estimates_must_match_sum_of_waypoints_estimates
 
---

## Model Relationships summary 

To quickly understand the model relationships I have coded inside.

#### Order
1. Can have multiple waypoints
2. Belongs to a Driver
3. Belongs to a User
4. Has one status

#### Waypoint
1. Belongs to an Order
3. Belongs to a recipient
4. Has one status

#### Driver
1. Can have multple orders
2. Can have multiple waypoints through orders

#### Recipient
1. Can own mutiple waypoints
2. Can own multiple orders via multiple waypoints

#### WaypointStatus
#### OrderStatus
#### VerificationRequest

---

## Some guesswork was done

1. For saving latlong I have used varchar to save a csv string like "22.5056838,88.3326459" instead of using 2 decimal types. This is mostly for convenience but we can maintain individual decimal fields for the lat and long if required as well.

2. I didn't know how to present certain behaviours for the test like sending notifications to drivers for open deliveries, so have created an endpoint for it.

---

## Future interest

1. Would be a good idea to have a separate table for storing latlong-address-user_id-number_of_requests mapping in a table for recording past addresses searched. This would be useful in auto suggesting frequently used addressed by a user. Haven’t implemented this part as it’s not asked for/suggested in the design screens.