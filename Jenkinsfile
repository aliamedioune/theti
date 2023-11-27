pipeline {
agent any
stages {


stage('Get Repo') {
steps {
sh 'sudo rm -r /var/lib/jenkins/workspace/CICD_Test/*'
git branch: 'main', url: 'https://github.com/alexdoe99/theti.git'
}
}

stage('old build down') {
steps {
sh 'sudo chmod 777 -R /var/run/docker.sock'
sh 'sudo chmod 777 -R /var/lib/jenkins/workspace/CICD_Test/'
sh 'cd /var/lib/jenkins/workspace/CICD_Test/docker && docker compose down'
}
}




stage('Build UP') {
steps {

sh 'docker build -t theti .'
sh 'cd /var/lib/jenkins/workspace/CICD_Test/docker && docker compose up -d --build'
}
}
stage('Test') {
steps {
sh 'cd /var/lib/jenkins/workspace/CICD_Test && phpunit --log-junit result.xml UnitTestFiles/Test/'
}
}

}
}
