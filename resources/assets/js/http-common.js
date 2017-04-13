/**
 * Created by developer on 4/13/17.
 */
import axios from 'axios';

export const HTTP = axios.create({
    baseURL: `http://scraper-spa-test.loc/api/`,
    headers: {
        Authorization: 'Bearer {token}'
    }
});
