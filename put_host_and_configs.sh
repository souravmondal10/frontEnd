#!/bin/bash
pwd
cat apiCall.js
sed -i "s/API_HOST_XXX/$API_HOST/g" apiCall.js
