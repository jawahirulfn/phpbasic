override fun onActivityResult(requestCode: Int, resultCode: Int, data: Intent?) {
        super.onActivityResult(requestCode, resultCode, data)
        if (resultCode == RESULT_OK) {
            when (requestCode) {
                101 -> {
                    var pictureUri: Bitmap? = data?.getParcelableExtra("data")
                    bindingCamera.imgView.setImageBitmap(pictureUri)
                    bindingCamera.imgView.visibility = View.VISIBLE
                    bindingCamera.videoView.visibility = View.GONE
                    

                    //Mengirim foto menggunakan OkHttp
                    val requestBody = MultipartBody.Builder()
                        .setType(MultipartBody.FORM)
                        .addFormDataPart(
                            "image",
                            "image.jpg",
                            createRequestBodyFromBitmap(pictureUri)
                        )
                        .build()

                    val request = Request.Builder()
                        .url("https://qb5tvr8s-5000.asse.devtunnels.ms/predict")
                        .post(requestBody)
                        .build()

                    val client = OkHttpClient()
                    client.newCall(request).enqueue(object : Callback {
                        override fun onFailure(call: Call, e: IOException) {
                            // Handle failure
                            runOnUiThread {
                                Toast.makeText(applicationContext, "Request failed: ${e.message}", Toast.LENGTH_SHORT).show()
                            }
                        }

                        override fun onResponse(call: Call, response: Response) {
                            // Handle response
                            val responseBody = response.body?.string()

                            runOnUiThread {
                                if (response.isSuccessful) {
                                    Toast.makeText(applicationContext, "Response: $responseBody", Toast.LENGTH_SHORT).show()
                                } else {
                                    Toast.makeText(applicationContext, "Request failed: ${response.code}", Toast.LENGTH_SHORT).show()
                                }
                            }
                        }
                    })
                }
                // ...
            }
        }
    }
