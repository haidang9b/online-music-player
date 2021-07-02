package com.example.musicapp.API;

public class APIService {
    private static String base_url = "https://haidangus.000webhostapp.com/Server/";

    public static Dataservice getService() {
        return APIRetrofitClient.getClient(base_url).create(Dataservice.class);
    }
}
