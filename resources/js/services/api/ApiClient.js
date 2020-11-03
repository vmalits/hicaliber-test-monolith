import axios from "axios";

const client = axios.create({
    baseURL: "http://localhost",
    withCredentials: true,
    headers: {
        accept: "application/json"
    }
});

export default client;
