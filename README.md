# Raspi Dashboard
Web interface to show my Raspberry Pi's information

## Setup:
For this to work properly, there are a few dependencies that involves a quick setup.

### IP Log:
The IP log uses the last updated time of the .dynv6.addr6 file, that dynv6 creates every time it updatesd the current ip.

#### Dynv6:
- Setup the dynv6 script to run on cron, following the instructions [here](https://dynv6.com/zones/39075/instructions)

#### IP log script:
- Point the `/scripts/ip_log.sh` script to the correct `.dynv6.addr6` file (usually in the user's home page)
